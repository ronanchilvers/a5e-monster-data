---
statblock: true
name: 'Behir Magus - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Monstrosity
cr: 12
ac: 16
hp: 168
hit_dice: '16d12 + 64'
speed: '60 ft., climb 40 ft., swim 40 ft.'
stats:
    - 20
    - 14
    - 18
    - 10
    - 16
    - 12
damage_immunities: lightning
saves:
    dexterity: 6
    intelligence: 4
    wisdom: 7
skillsaves:
    athletics: 9
    perception: 7
    stealth: 6
senses: 'darkvision 90 ft., passive Perception 17'
languages: 'Common, Draconic'
traits:
    - { name: 'Spider Climb', desc: 'The behir can use its climb speed even on difficult surfaces and upside down on ceilings.' }
    - { name: Serpentine, desc: 'The behir can move through a space as narrow as 5 feet wide, vertical or horizontal, at full speed, without squeezing.' }
actions:
    - { name: Multiattack, desc: 'The behir makes a bite attack and then a constrict attack.' }
    - { name: Bite, desc: "Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 24 (3d12 + 5) piercing damage. If the target is a Medium or smaller creature grappled by the behir, and the behir has not swallowed anyone else, the target is swallowed. A swallowed creature is blinded and restrained, it has total cover from attacks from outside the behir, and it takes 21 (6d6) acid damage at the start of each of the behir's turns." }
    - { name: 'If a swallowed creature deals 30 or more damage to the behir in a single turn, or if the behir dies, the behir vomits up the creature', desc: '' }
    - { name: Constrict, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 21 (3d10 + 5) bludgeoning damage. The target is grappled (escape DC 17) and restrained while grappled. The behir can grapple two creatures at once.' }
    - { name: 'Lightning Breath (Recharge 56)', desc: 'The behir breathes a line of lightning 5 feet wide and 20 feet long. Creatures in the area make a DC 16 Dexterity saving throw, taking 56 (16d6) lightning damage on a failed save or half damage on a success.' }
reactions:
    - { name: 'Vengeful Breath (1/Day, While Bloodied)', desc: 'When struck by a melee attack, the behir immediately recharges and uses Lightning Breath, including the attacker in the area of effect.' }
    - { name: 'Blindness (1/Day)', desc: 'When struck by a ranged or area attack by a creature within 60 feet that it can see, the behir forces the attacker to make a DC 13 Constitution saving throw. On a failure, the creature is magically blinded for 1 minute. The creature can repeat the saving throw at the end of each of its turns.' }
    - { name: 'Invisibility (1/Day)', desc: 'When damaged by an attack, the behir magically becomes invisible for 1 minute or until it makes an attack.' }
    - { name: 'Drain Charge (1/Day)', desc: 'When subjected to lightning damage, the behir takes no damage, and the attacker or caster takes necrotic damage equal to the lightning damage dealt.' }
combat:
    - { name: 'The behir prefers to attack with surprise, often from the ceiling', desc: 'It opens with a lightning bolt and then tries to bite, constrict, and swallow. It tries to escape when badly hurt, and usually has a bolthole nearby.' }

---
```statblock
monster: Behir Magus - A5E
```

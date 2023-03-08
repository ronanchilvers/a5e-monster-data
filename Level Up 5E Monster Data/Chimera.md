---
statblock: true
name: Chimera
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 7
ac: 13
hp: 114
hit_dice: '12d10 + 48'
speed: '30 ft., fly 60 ft.'
stats:
    - 18
    - 10
    - 18
    - 3
    - 16
    - 10
saves:
    - { constitution: 7 }
    - { intelligence: -1 }
    - { wisdom: 6 }
skillsaves:
    - { perception: 6 }
senses: 'darkvision 60 ft., passive Perception 21'
languages: 
traits:
    - { name: 'Reactive Heads', desc: 'The chimera can take three reactions per round, but not more than one per turn.' }
    - { name: 'Three Heads', desc: "The chimera has advantage on Perception checks and on saving throws against being blinded, charmed, deafened, frightened, stunned, and knocked unconscious, and it can't be flanked." }
    - { name: Wakeful, desc: "When one of the chimera's heads is asleep, the others are awake." }
actions:
    - { name: Headbutt, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) bludgeoning damage. The target must succeed on a DC 15 Strength saving throw or fall prone.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) piercing damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 9 (2d4 + 4) slashing damage, or 14 (4d4 + 4) slashing damage against a prone target.' }
    - { name: 'Breath Weapon (Recharge 56)', desc: 'The dragon head breathes fire in a 15-foot cone. Creatures in the area make a DC 15 Dexterity saving throw, taking 21 (6d6) fire damage on a failed save or half damage on a success.' }
reactions:
    - { name: 'Tail Swipe (1/Day)', desc: "If a creature within 5 feet hits the chimera with a melee attack, the attacker is battered by the chimera's tail. The attacker makes a DC 15 Strength saving throw. On a failure, it takes 9 (2d4 + 4) bludgeoning damage and is pushed 10 feet from the chimera and knocked prone." }
    - { name: 'Winged Charge (1/Day)', desc: 'If a creature the chimera can see hits it with a ranged attack, the chimera leaps off the ground and moves up to its fly speed towards the attacker. If within range, the chimera then makes a headbutt attack against the attacker.' }
legendary_actions:
    - { name: 'The chimera can take 2 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Bite, desc: 'The chimera uses its Bite attack.' }
    - { name: Claw, desc: 'The chimera uses its Claw attack.' }
combat:
    - { name: 'The chimera uses its Breath Weapon when it can', desc: 'It usually makes a headbutt attack on its turn, and it uses each of its legendary actions to claw a prone creature or bite anyone else. If a creature hits it with a particularly potent ranged attack, it uses its Winged Charge to try to punish that creature. It fights to the death.' }

---
```statblock
monster: Chimera
```

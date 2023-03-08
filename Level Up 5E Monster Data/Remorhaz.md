---
statblock: true
name: Remorhaz
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Monstrosity
cr: 12
ac: 17
hp: 195
hit_dice: '17d12 + 85'
speed: '30 ft., burrow 20 ft.'
stats:
    - 22
    - 12
    - 20
    - 4
    - 12
    - 5
damage_immunities: 'cold, fire'
saves:
    - { intelligence: 1 }
    - { wisdom: 5 }
senses: 'darkvision 60 ft., tremorsense 60 ft., passive Perception 11'
traits:
    - { name: 'Heated Body', desc: "A creature that starts its turn grappled by the remorhaz, touches it, or hits it with a melee attack while within 5 feet takes 10 (3d6) fire damage, or 21 (6d6) fire damage if the remorhaz is bloodied. A creature can take this damage only once on a turn. If the remorhaz has been subjected to cold damage since the end of its last turn, this trait doesn't function." }
actions:
    - { name: Multiattack, desc: 'The remorhaz makes a bite attack and then a constrict attack.' }
    - { name: Bite, desc: "Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 16 (3d6 + 6) piercing damage plus 10 (3d6) fire damage. If the target is a Medium or smaller creature grappled by the remorhaz, the target is swallowed. A swallowed creature is blinded and restrained, it has total cover from attacks from outside the remorhaz, and it takes 21 (6d6) acid damage at the start of each of the remorhaz's turns." }
    - { name: 'If a swallowed creature deals 30 or more damage to the remorhaz in a single turn, or if the remorhaz dies, the remorhaz vomits up all swallowed creatures', desc: '' }
    - { name: Constrict, desc: "Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 16 (3d6 + 6) bludgeoning damage, and the target is subjected to the remorhaz's Heated Body trait. The target is grappled (escape DC 18) and restrained while grappled. The remorhaz can grapple three creatures at once." }
combat:
    - { name: 'The remorhaz ambushes prey, biting and then constricting', desc: 'It bites and swallows a constricted creature whenever possible. When reduced to 30 hit points or fewer, it releases any creatures it is constricting and plays dead.' }

---
```statblock
monster: Remorhaz
```

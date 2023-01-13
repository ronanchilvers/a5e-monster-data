---
statblock: true
name: 'Deva - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Celestial
cr: 10
ac: 17
hp: 153
hit_dice: '18d8 + 72'
speed: '30 ft., fly 90 ft.'
stats:
    - 18
    - 18
    - 18
    - 18
    - 20
    - 20
damage_resistances: 'radiant; damage from nonmagical weapons'
condition_immunities: 'charmed, exhaustion, frightened'
saves:
    - { wisdom: 9 }
    - { charisma: 9 }
skillsaves:
    - { insight: 9 }
    - { perception: 9 }
    - { religion: 9 }
senses: 'truesight 30 ft., passive Perception 19'
languages: 'all, telepathy 120 ft.'
traits:
    - { name: 'Magic Resistance', desc: 'The deva has advantage on saving throws against spells and magical effects.' }
    - { name: Aligned, desc: 'An angel radiates a Lawful aura. Most angels also radiate a Good aura, and a few radiate Evil.' }
    - { name: 'Celestial Dissolution', desc: 'When an angel dies, its body and equipment dissolve into motes of light.' }
    - { name: 'Detect Alignment', desc: 'An angel knows the alignment, if any, of each creature within 30 feet that it can see.' }
    - { name: 'Immortal Nature', desc: "An angel doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The deva makes two attacks.' }
    - { name: 'Celestial Hammer (Deva Form Only)', desc: "Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) bludgeoning damage plus 17 (5d6) radiant damage. On a hit, the target can't make opportunity attacks against the deva until the beginning of the target's next turn." }
    - { name: 'Divine Blast', desc: 'Ranged Spell Attack: +8 to hit, range 60 ft., one target. Hit: 22 (5d8) radiant damage.' }
    - { name: 'Radiant Energy (1/Day)', desc: 'The deva touches a creature other than itself. If the target is unwilling, the deva makes an attack roll with a +8 bonus. The deva can choose to magically heal 60 hit points of damage and end any blindness, curse, deafness, disease, or poison on the target. Alternatively, the deva can choose to deal 60 radiant damage to the target.' }
    - { name: 'Change Form', desc: 'The deva magically transforms into a beast or humanoid or back into its true form. It retains its deva statistics, including speech and telepathy, except that it has the size, movement modes, and traits of its new form.' }
combat:
    - { name: 'Against an isolated foe, the deva flies by the target, using Celestial Hammer and escaping out of range', desc: 'Against a foe with an inferior ranged attack, it uses Divine Blast from a distance. In other circumstances, it closes to melee range and uses Radiant Energy and Celestial Hammer. Angels have no fear and rarely retreat.' }

---
```statblock
monster: Deva - A5E
```

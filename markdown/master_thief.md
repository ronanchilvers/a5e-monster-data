---
statblock: true
name: 'Master Thief - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 17
ac: 18
hp: 143
hit_dice: '22d8 + 44'
speed: '30 ft.'
stats:
    - 20
    - 20
    - 14
    - 15
    - 12
    - 12
saves:
    dexterity: 11
    intelligence: 8
    wisdom: 7
skillsaves:
    acrobatics: 11
    deception: 7
    perception: 7
    sleight: 0
    stealth: 11
senses: 'blindsight 20 ft., darkvision 60 ft., passive Perception 17'
languages: 'any three'
traits:
    - { name: 'Crossbow Expert', desc: "The master assassin ignores the loading quality of light crossbows, and being within 5 feet of a hostile creature doesn't impose disadvantage on the master assassin's ranged attack rolls." }
    - { name: 'Deadly Poison', desc: 'As part of making an attack, the master thief can apply a deadly poison to their weapons (included below). The master thief carries 3 doses of this poison. A single dose can coat two melee weapons or up to 10 pieces of ammunition. A creature reduced to 0 hit points by their poison damage is stable but unconscious for 1 hour' }
    - { name: Evasion, desc: 'When the master assassin makes a Dexterity saving throw against an effect that deals half damage on a success, they take no damage on a success and half damage on a failure.' }
    - { name: 'Sneak Attack (1/Turn)', desc: "The master assassin deals an extra 28 (8d6) damage when they hit with a weapon attack while they have advantage on the attack, or when the master assassin's target is within 5 feet of an ally of the master assassin while the master assassin doesn't have disadvantage on the attack." }
    - { name: 'Cunning Celerity', desc: 'The master thief takes two bonus actions on each of their turns.' }
actions:
    - { name: Multiattack, desc: 'The master assassin attacks twice.' }
    - { name: Shortsword, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 8 (1d6 + 5) piercing damage. The target makes a DC 19 Constitution saving throw, taking 17 (5d6) poison damage on a failure, or half as much damage on a success.' }
    - { name: 'Light Crossbow', desc: 'Ranged Weapon Attack: +11 to hit, range 80/320 ft., one target. Hit: 9 (1d8 + 5) piercing damage. The target makes a DC 19 Constitution saving throw, taking 17 (5d6) poison damage on a failure, or half as much damage on a success.' }
'bonus actions':
    - { name: 'Cunning Action', desc: 'The assassin takes the Dash, Disengage, Hide, or Use an Object action.' }
    - { name: 'Rapid Attack', desc: 'The assassin attacks with their shortsword.' }
    - { name: 'Master thieves pride themselves on being able to steal anything, no matter how well-guarded', desc: 'Many master thieves avoid killing when possible.' }

---
```statblock
monster: Master Thief - A5E
```
